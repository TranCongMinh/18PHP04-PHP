CREATE DATABASE MINHMINH
---------*******---------------
CREATE TABLE KHACHHANG (
	id_KH int IDENTITY(1,1) primary key not null,
	hoten_KH nvarchar(255) not null,
	tendangnhap_KH nvarchar(255) not null,
	matkhau_KH nvarchar(255) not null,
	SDT int,
	avatar nvarchar(255) DEFAULT 'noneavt.png',
	Email nvarchar(255)
)
---------*******---------------
CREATE TABLE NHANVIEN (
	id_NV int IDENTITY(1,1) primary key not null,
	hoten_NV nvarchar(255) not null,
	tendangnhap_NV nvarchar(255) not null,
	matkhau_NV nvarchar(255) not null,
	quyen int not null,
	SDT int,
	Email nvarchar(255)

)
---------*******---------------
CREATE TABLE HANGSANXUAT (
	id_HSX int IDENTITY(1,1) primary key not null,
	tenNSX varchar(255)
)
---------*******---------------
CREATE TABLE BINHLUAN (
	id_cmt id_HSX int IDENTITY(1,1) primary key not null,
	id_DT int,
    FOREIGN KEY (id_DT) REFERENCES DIENTHOAI(id_DT),
    id_KH int,
    FOREIGN KEY (id_KH) REFERENCES KHACHHANG(id_KH),
    noidung text,
)
---------*******---------------
CREATE TABLE DIENTHOAI (
	id_DT int IDENTITY(1,1) primary key not null,
	id_HSX int,
    FOREIGN KEY (id_HSX) REFERENCES HANGSANXUAT(id_HSX),
	Ten_DT nvarchar(255) not null,
	BoNho nvarchar(255),
	Ram nvarchar(255),
	ManHinh nvarchar(255),
	Cameratruoc nvarchar(255),
	Camerasau nvarchar(255),
	BaoMat nvarchar(255),
	TheSim nvarchar(255),
	DungLuongPin nvarchar(255),
	TinNangKhac text(255),
	Gia money,
	SoLuong int,
	images nvarchar(255) DEFAULT 'noneimg.png',
)
---------*******---------------
CREATE TABLE HOADON (
	Ma_HD int IDENTITY(1,1) primary key not null,
	id_KH int,
    FOREIGN KEY (id_KH) REFERENCES KHACHHANG(id_KH),
	id_NV int,
    FOREIGN KEY (id_NV) REFERENCES NHANVIEN(id_NV),
    Diachigiao nvarchar(255)  not null,
    SDTnguoiNhan int not null, -- tự động điền số điện thoại khách hàng
	NgayLap datetime,
	NgayGiao datetime,
	TongTien money
)
---------*******---------------
CREATE TABLE CHITIETHOADON(
	Ma_HD int,
    FOREIGN KEY (Ma_HD) REFERENCES HOADON(Ma_HD),
	id_DT int,
    FOREIGN KEY (id_MA) REFERENCES DIENTHOAI(id_DT),
	SoLuong int,
	KhuyenMai nvarchar(255),
	DonGia money
)
---------*******---------------
CREATE TABLE NHACUNGCAP(
	ID_NCC int IDENTITY(1,1) primary key not null,
	TenNCC nvarchar(50) not null,
	Diachi nvarchar(50) not null,
	SDT int,
)
CREATE TABLE PHIEUNHAP(
	ma_phieunhap int IDENTITY(1,1) primary key,
	id_NV int,
    FOREIGN KEY (id_NV) REFERENCES NHANVIEN(id_NV),
	id_NCC int,
    FOREIGN KEY (id_NCC) REFERENCES NHACUNGCAP(id_NCC),
	NgayLap datetime,
	TongTien money
)
---------*******---------------
CREATE TABLE CHITIETPHIEUNHAP(
	ma_phieunhap int,
    FOREIGN KEY (ma_phieunhap) REFERENCES PHIEUNHAP(ma_phieunhap),
	id_DT int,
    FOREIGN KEY (id_DT) REFERENCES DIENTHOAI(id_DT),
	SoLuong int,
	ThanhTien money,
	TongTien money
)