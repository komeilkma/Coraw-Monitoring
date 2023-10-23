import os
import pandas as pd

folder_path = "your_folder_path_here"
database_name = "train"
sql_script = ""

excel_files = [f for f in os.listdir(folder_path) if f.endswith('.xlsx')]

create_db_sql = f"CREATE DATABASE IF NOT EXISTS {database_name};"
sql_script += create_db_sql + "\n"

use_db_sql = f"USE {database_name};"
sql_script += use_db_sql + "\n"

for excel_file in excel_files:
    table_name = os.path.splitext(excel_file)[0]
    df = pd.read_excel(os.path.join(folder_path, excel_file))
    
    create_table_sql = f"CREATE TABLE {table_name} ("
    
    for col_name, col_type in zip(df.columns, df.dtypes):
        sql_type = col_type.name
        create_table_sql += f"{col_name} {sql_type}, "
    
    create_table_sql = create_table_sql[:-2]
    create_table_sql += ");\n"
    sql_script += create_table_sql
    
    for _, row in df.iterrows():
        insert_sql = f"INSERT INTO {table_name} ({', '.join(df.columns)}) VALUES ("
        values = []
        
        for value in row:
            if pd.isna(value):
                values.append("NULL")
            elif isinstance(value, str):
                values.append(f"'{value}'")
            else:
                values.append(str(value))
        
        insert_sql += ", ".join(values) + ");\n"
        sql_script += insert_sql

with open("import_data.sql", "w", encoding="utf-8") as sql_file:
    sql_file.write(sql_script)

print("SQL script generated and saved to import_data.sql")
