import mysql.connector as DB

App = DB.connect(host="127.0.0.1",port=3307,user="test",password="test123",database="testdb")

MyCursor = App.cursor()

def InsertApi(Name,Account,Password):
    Query = f"select * from login where name='{Name}' and account='{Account}' and password='{Password}'"
    MyCursor.execute(Query)
    Count = len(MyCursor.fetchall())
    if Count == 0:
        Insert = f"insert into login(name,account,password)values('{Name}','{Account}','{Password}')"
        MyCursor.execute(Insert)
        App.commit()
    return Count

def SelectApi(Account,Password):
    Select_Query=f"select * from login where account='{Account}' and password='{Password}'"
    MyCursor.execute(Select_Query)
    Count = len(MyCursor.fetchall())
    return Count
