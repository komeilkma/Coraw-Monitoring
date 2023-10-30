<?php
// API Version : 1.0.0
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;
use App\Controllers\BasicFunctions;

class ApiController extends ResourceController
{
    protected $BasicFunctions;

    public function __construct()
    {
        $this->BasicFunctions = new BasicFunctions();
    }



    public function Authenticate_User()
    {
        $data = $this->request->getJSON();

    
        $db = \Config\Database::connect();
        $db->connect();
        $query = $db->table('users')->where('Username', $data->username)->get();
        if ($query->getNumRows() === 1) {
            $user = $query->getRow();
            $hashedPassword = $user->PasswordHash;

            if (password_verify($data->password, $hashedPassword)) {
                $key = getenv('api.jwt.secret');
                $payload = [
                    'time' => time(),
                    'username' => $data->username,
                    'exp' => time() + 864000,
                ];
                $token = JWT::encode($payload, $key, 'HS256');
                return $this->respond(['user' => $data->username, 'token' => $token]);
            }else {

                return $this->failUnauthorized("username or password is incorrect");
            }
        }else {
          
            return $this->failNotFound("profile was not found");

        }

    }

    public function Create_User() {
        $data = $this->request->getJSON();
        $invitation_code = getenv('api.invitation.code');
        if ( $data->invitationcode == $invitation_code) {
            $db = \Config\Database::connect();
            $db->connect();
            $querycheck = $db->table('users')->where('Username', $data->username)->orWhere('email', $data->email)->get();
            if ($querycheck->getNumRows() > 0) {
                return $this->failResourceExists("User Exist");
            }else {

            if ($this->BasicFunctions->checkNotEmpty($data,false)) {
                $query = $db->table('users');
                $register_data = [
                    'Username'       => $data->username,
                    'PasswordHash'        => password_hash($data->password,PASSWORD_DEFAULT),
                    'Email'        => $data->email,
                    'UserRole'        => "user",
                ];
                $query->insert($register_data); 
                return $this->respond(['user' => $data->username, 'status' => "Register Complete"]);
               
            }else {
                return $this->failValidationError("incomplete data");
            }
        }
        }else {

            return $this->failUnauthorized("for register need invitation code");
        }


    }




}
