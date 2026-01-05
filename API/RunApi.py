from flask import Flask, jsonify, request
import Database

App = Flask(__name__)

@App.route("/RegisterApi/",methods=["post"])
def Register():
    data = request.get_json()
    Result_Count = Database.InsertApi(data["name"],data["account"],data["password"])
    return jsonify({"Result":Result_Count})

@App.route("/LoginApi/",methods=["post"])
def Login():
    data = request.get_json()
    Result_Count = Database.SelectApi(data["account"],data["password"])
    return jsonify({"Result":Result_Count})

if __name__ == "__main__":
    App.run(debug=True)