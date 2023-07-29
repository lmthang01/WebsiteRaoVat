# Website rao vặt
# https of github: https://github.com/ThangB1906766/ChoTot.git
#1. Cài đặt, phân chia folder, controller , view Backend và Frontend
- Tạo project: composer create-project laravel/laravel ten-project
- Start server:  php artisan serve
- Cấu trúc folder
- Tách fontend, backend ở view
    resource
        view
            fontend
                home
                category
                product
            backend
                home
                category
                product
- Tách fontend, backend ở controller
    php artisan make:controller Fontend/HomeController

    php artisan make:controller Backend/HomeController
    php artisan make:controller Backend/CategoryController
    php artisan make:controller Backend/ProductController
- Phân chia view fontend, backend

#2. Ghép layout backend
- Playout admin: https://getbootstrap.com/docs/4.0/examples/dashboard/
- Ghép layouts
- Cấu trúc sidebar admin (file nav.php trong config)

#3. Ghép layout category
- Playout category: https://getbootstrap.com/docs/4.6/components/forms/

#4. Xử lý thêm sửa xoá category (Kết nối csdl, tạo table)
- Tạo table: php artisan make:migration create_categories_table
- Đẩy lên phpAdmin: php artisan migrate
- Tạo Model Category: php artisan make:model Category 
- Thêm, sửa, xóa Category.

#5. Update việc validate category (Xử lý thêm danh mục bị trùng)
- Tạo request validate: php artisan make:request CategoryRequest
- Doc: key "request form validate"

#6. Tạo layout thêm xửa xoá cho sản phẩm
- Tạo router
- Tạo view
- Tạo Controller
    Tạo model: php artisan make:model Product
- Tạo table: php artisan make:migration create_products_table 
- Thêm vào Models -> Product

#7. Xử lý thêm sửa xoá danh sách sản phẩm
- Xóa table để thêm cột: php artisan migrate:rollback
- Tạo lại: php artisan migrate

#8. Viết hàm upload file, ảnh 
- Tạo folder
    Helper
        + autoload.php
        + upload_file.php
- Edit file composer.json
        "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        },
        "files":[
            "app/Helper/autoload.php"
        ]
    },
- Cài đặt lại composer: composer dump-autoload

#9. Dựng template quản lý user và user type
- Tạo route cho user
- Tạo controller cho user: 
    php artisan make:controller Backend/UserController 
    php artisan make:controller Backend/UserTypeController 
- Tạo view/user

#10. Xử lý dữ liệu user và user type
- 

#11. Show active, user_type tương ứng tài khoản 

#12. Hiển thị trạng thái sản phẩm

#13. Tạo form upload nhiều ảnh cho sản phẩm, xử lý lưu ảnh
- https://github.com/kartik-v/bootstrap-fileinput
- php artisan make:migration create_products_images_table 
- php artisan make:model ProductImage

#14. Hiển thị xoá album ảnh sản phẩm

#15. Form đăng nhập admin
- Tạo thư mục views/backend/auth/login.blade.php
- Tạo controller: php artisan make:controller Backend/AuthController 
- Giao diện: https://bootsnipp.com/snippets/351Vo


#16. Xử lý đăng nhập
- php artisan make:request LoginAdminRequest 
- Tạo route

#17. Check login - Type Admin mới đc vào admin
- Tạo middleware:  php artisan make:middleware CheckLoginAdmin  
- Request/kernel.php -> Thêm CheckLoginAdmin
- Chỉnh Route (group)
- Key: Authentication

#18.  Hiển thị thông tin tài khoản đăng tin - Tìm kiếm sản phẩm
- Phát hiện bug chức năng "Thêm mới user"

#19. Làm giao diện dashboard và hiển thị số liệu
- Key: bg bootstrap 4

#20. Thiết kế CSDL location
- Thiết kế csdl: php artisan make:migration create_locations_table 
- php artisan migrate 
- Tạo model: php artisan make:model Ward/ District/  Province
- Thêm cột mới cho bảng products
    + php artisan make:migration alter_column_location_in_table_production

#21. Import dữ liệu location - Tạo view location

#22. Lưu dữ liệu location cho product
- https://api.jquery.com/jquery.ajax/

#23. Update product và active location
- Update product và active location

#24. Show tỉnh thành, quận huyện, phường xã tương ứng sản phẩm 

#25. Show trang chủ, chi tiết, ghép layout 
- php artisan make:controller Frontend/ProductDetailController 
- php artisan make:controller Frontend/CategoryController 
- Tạo route
- Chia layouts  

#26. Show danh mục trang chủ 
- chunk collection laravel

#27. Quản lý thêm sửa xoá slide
- Tạo table csdl: php artisan make:migration create_slides_table 
- Tạp model: php artisan make:mode Slide 
- Tạo controller: php artisan make:controller Backend/SlideController
- Tạo route: Nhân bản category

#28. Show slide trang chủ

#29.  Show category 

#30. Show chi tiết sản phẩm

#31. Đăng ký - đăng nhập
- Tạo controller: php artisan make:controller Fontend/AuthController 

#35. Customer nav admin

#36. Cập nhật profile admin
- Tạo controller
- Tạo route
- Tab bootstrap
- Get route name ??

#37. Cập nhật mật khẩu admin
- Validate confrim password laravel: https://techvblogs.com/blog/password-and-confirm-password-validation-in-laravel

#38. Tạo thông báo thành công, thất bại
- Git: https://github.com/yoeunes/toastr

#39. Show album ảnh chi tiết sản phẩm 

#40. Phân quyền với laravel/permission
- Laravel permission: https://spatie.be/docs/laravel-permission/v5/installation-laravel
- Cài đặt:  composer require spatie/laravel-permission
- config/app/provider -  Spatie\Permission\PermissionServiceProvider::class
- publish: php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
- Thêm :   $table->string('group')->nullable(); // Thêm mới 15/05/2023
- Chạy: php artisan migrate
- Cấu trúc folder
    views/role, permission
    controller
    route

#41. Thêm sửa xoá permission 

#42. Thêm sửa xoá role
- Use ở model user: https://spatie.be/docs/laravel-permission/v5/basic-usage/basic-usage

#43. Show permission lúc thêm và cập nhật role 

#44. Xử lý permission lúc thêm và cập nhật role

#45. Active role, permission, user type

#46. Customer view 403

#47. Tuỳ chỉnh lại view frontend

#48. Test gủi email xác nhận tài khoản
- Send email laravel
- php artisan make:mail SendEmailRegisterUser

#49. Gủi email xác thực tài khoản và tạo mới mật khẩu
- Tạo controller: php artisan make:controller Frontend/VerifyAccountController 

#50. Sử dụng queue vào việc gủi email
- Queueing Mail laravel
- Thêm table jobs: php artisan queue:table
- Lắng nghe:  php artisan queue:work 
- Khơi tạo github.

#51. Update profile người dùng
- Lưu icon ở mục quản lý thông tin trong folder images
- Tạo folder user/update_profile.blade.php
- Tạo controller:  User/ProfileController 

#52. Tính năng tìm kiếm tên sản phẩm
- Tạo controller
- Tạo route
- Tạo view
- Tạo conponent

#53. Quản lý tin đăng user
- Tạo controller
- Tạo route

## Một số bug: 1: giao diện hiển thị hình ảnh, phân quyền, nút đăng tin khi chưa đăng nhập


#54. Giao diện thêm mới tin đăng user

#55. Xử lý thêm mới, cập nhật tin

#56. Set tiêu đề page - tính năng đăng xuất 

#57. CSDL phần OTPS

#58. Giao diện xử lý update email và OTP

#59. Xử lý việc validate dữ liệu gủi OTP cho user

#60. Send otp to email 

#61. Xử lý update email và verify OTP Update query

#62. Xử lý update email và verify OTP Update query 

#63. Giao diện và route tính năng quên mật khẩu

#64. Xử lý thông tin quên mật khẩu, send email quên mật khẩu

#65. Done xử lý phần quên mật khẩu, update giao diện

#66. Tạo route menu và article

#67. Tạo bảng menu, article, xử lý thêm sửa xoá menu

#68. Tạo view quản lý cho articles

#69. Xử lý thêm mới, cập nhật, xoá bài viết

#70. Show tác giả, lọc bài viết 

- Màu chủ đạo: #1f7ed0



