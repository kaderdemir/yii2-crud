# user api with yii2 <sup>basic</sup>

#### Web apps with Yii 2 Rest API.. 

Built with * [Yii2](http://www.yiiframework.com/) 

## Prerequisite Technologies

* [Git](https://git-scm.com/downloads)  
* MySql

## Installation

Clone the repository from Github.
```
git clone https://github.com/shweta130890/yii-framework.git
cd yii-framework
composer update 
```

## APIs with sample payloads
### GET(api/user/all) 
 ```json
[
    {
        "id": 1,
        "username": "shweta",
        "email": "shweta@mailinator.com",
        "password": "123456",
        "isActive": false,
        "role": 1
    },
    {
        "id": 2,
        "username": "shweta1",
        "email": "shweta1@mailinator.com",
        "password": "123456",
        "isActive": true,
        "role": 1
    },
    {
        "id": 3,
        "username": "shweta2",
        "email": "shweta2@mailinator.com",
        "password": "123456",
        "isActive": true,
        "role": 10
    }
]
```

### POST(api/user/login) 
 ```json
  { 
        "username": "shweta/shweta@mailinator.com", 
        "password": "123456" 
    } 
```

### POST(api/user/signup) 
 ```json
  { 
        "username": "shweta2",
        "email": "shweta2@mailinator.com",
        "password": "123456"
    } 
    
 ```
    
### PUT(api/user/update?id=1) 
 ```json
  { 
        "isActive": true,
    }  
 ```
