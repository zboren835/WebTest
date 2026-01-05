# WebApi_Test

1.API 是 Application Programming Interface（應用程式介面） 的縮寫。

2.你可以把 API 想成是「軟體之間溝通的標準窗口或規則」，讓不同程式不用知道彼此內部怎麼寫，也能互相合作。

## 準備好軟體、套件
- 系統：Windows/Linux
- 程式設計：Python3.14.2
- 資料庫：MySQL
- 軟體：Visual Studio Code
- 套件：flask、mysql-connector-python

## 實現功能(Python)-程式碼：RunApi.py + Database.py
- LoginApi_Test
    1. 通訊方式：Post
    2. API：http://localhost:5000/LoginApi/
- RegisterApi_Test
    1. 通訊方式：Post
    2. API：http://localhost:5000/RegisterApi/
- SelectApi_Test
    1. 通訊方式：Get
    2. API：http://localhost:5000/SelectApi/

## 測試
1.LoginApi_Test：
```json
{
    "account":"aa123",
    "password":"a123"
}
結論：
若Result為0 ==>「登入失敗」
若Result為1 ==>「登入成功」
```
2.RegisterApi_Test：
```json
{
    "name":"admin",
    "account":"aa123",
    "password":"a123"
}
結論：
若Result為1 ==>「註冊成功」
若Result為0 ==>「註冊失敗」