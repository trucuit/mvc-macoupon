# MVC Macoupon

Hệ thống quản lý mã coupon/giảm giá, xây dựng bằng PHP thuần theo mô hình MVC, tích hợp AccessTrade.

## 📋 Tính năng

- Quản lý sản phẩm và mã coupon
- Tích hợp AccessTrade affiliate link
- Giao diện responsive cho người dùng
- CRUD sản phẩm qua admin panel

## 🛠️ Công nghệ

- **Backend:** PHP (MVC pattern)
- **Database:** MySQL
- **Affiliate:** AccessTrade API

## ⚙️ Cài đặt

### 1. Clone repository

```bash
git clone https://github.com/trucuit/mvc-macoupon.git
cd mvc-macoupon
```

### 2. Tạo database

```sql
CREATE DATABASE test_coupon;
```

### 3. Cấu hình Environment

Thiết lập biến môi trường trước khi chạy:

| Biến | Mô tả | Mặc định |
|------|--------|----------|
| `DB_HOST` | MySQL host | `localhost` |
| `DB_USER` | MySQL username | `root` |
| `DB_PASS` | MySQL password | _(empty)_ |
| `DB_NAME` | Tên database | `test_coupon` |
| `URL_ACCESSTRADE` | AccessTrade deep link URL | _(required)_ |

### 4. Cấu hình AccessTrade

1. Đăng ký tài khoản tại [AccessTrade](https://pub.accesstrade.vn/)
2. Tạo campaign và lấy deep link
3. Set biến môi trường:

```bash
export URL_ACCESSTRADE="https://pub.accesstrade.vn/deep_link/YOUR_ID"
```

### 5. Chạy ứng dụng

Deploy lên Apache/Nginx web server với PHP enabled.

## 🔒 Bảo mật

> **⚠️ QUAN TRỌNG:** Không commit credentials vào source code. Sử dụng biến môi trường.

## 📄 License

All rights reserved.
