# Ishara Backend
Built on Laravel 10, this app was made for Ishara API Development using Laravel Framework.

# Repositories
|   Learning Paths       |                                Link                                              |
| :----------------:     | :----------------------------------------------------------------:               |
|   Organization         |            [Github](https://github.com/ishara-bangkit-capstone-project)                    |
|  Machine Learning      |            [Github](https://github.com/ishara-bangkit-capstone-project/ishara-machine-learning )   |
|  Cloud Computing  |        [Github](https://github.com/ishara-bangkit-capstone-project/ishara-backend-api)        |
| Mobile Development     |            [Github](https://github.com/ishara-bangkit-capstone-project/ishara-mobile-app) |

# Cloud Computing Team
|  Name | Bangkit ID | Contacts |
| ------------ | ------------ | ------------ |
| Rayhan Ashlikh Rosyada	 | C007D4KY0293 		 | [Github](https://github.com/rayhanashlikh) & [Linkedin](https://www.linkedin.com/in/rayhan-ashlikh-rosyada-598155197/)  |
| Muhammad Akbar Adityah	 | C134D4KY0393 		| [Github](https://github.com/baloerrr) & [Linkedin](https://www.linkedin.com/in/muhammad-akbar-adityah/) |

## Built With
![image](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)![image](https://img.shields.io/badge/Google_Cloud-4285F4?style=for-the-badge&logo=google-cloud&logoColor=white)![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)![image](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

## Cloud Architecture
![image](https://github.com/ishara-bangkit-capstone-project/ishara-backend-api/assets/56423774/a3b9cdeb-03d5-43d7-ab3e-dadc5e37eefe)

## Key Features
1. API Authentication using JSON Web Token (JWT), which includes Login, Register, Refresh Token, and Logout endpoints
2. Role using Spatie Laravel Permission
3. User Role
   - Profile : Get Profile, Get Total Obtained Stars
   - Dashboard : Get Latest Stage
   - Journey : List All Stages, Get All Levels on a Stage, Get All Questions on a Stage, Get All Questions on a Level, User Level Stars (Get Obtained Stars on a Level, Save Obtained Stars on a Level)
4. Admin Role :
   - File (Centralized File Management API, integrated with Google Cloud Storage)

## API Docs
For the API Documentation you can access it [here](https://documenter.getpostman.com/view/35279553/2sA3XQhN92)

## Installation Guide
1. Clone this repository `https://github.com/ishara-bangkit-capstone-project/ishara-backend-api`
2. Open the folder cloned from this repo
3. Run `composer install` to install any required dependencies, wait until done
4. Copy file `.env.example`, paste in the same folder and rename it to `.env`
5. Run command `php artisan key:generate` and `php artisan jwt:secret`
6. Edit the database configuration in `.env` file based on what you need on this segment
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_pass
```
7. Run the `php artisan migrate` to migrate the tables into your database. Make sure your MySQL instance is up and running.
8. Run `php artisan db:seed` to insert the existing dummy data
9. Run the program locally using `php artisan serve` command

## Installed Libraries
1. [spatie/laravel-permission](https://github.com/spatie/laravel-permission) : Used to manage user role and permission
2. [spatie/google-cloud-storage](https://github.com/spatie/laravel-google-cloud-storage) : Used to store image file data to google cloud storage
3. [orangehill/iseed](https://github.com/orangehill/iseed) : Use to make seeder data from existing data in database
