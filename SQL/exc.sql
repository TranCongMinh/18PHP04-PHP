-- Bài 1 Lấy các sản phẩm là guitar và có giá lớn hơn 500
SELECT * FROM `products` INNER JOIN categories ON products.categoryID = categories.categoryID WHERE categories.categoryName = 'Guitar' and  categoryID = 1 AND listPrice > 500
-- Bài 2 Lấy ra danh sách sản phẩm được thêm vào tháng 7/2014, có giá lớn hơn 300, và sắp xếp giảm dần theo giá
SELECT * FROM `products` WHERE dateAdded > '2014-07-01' and dateAdded < '2014-07-31' AND listPrice > 300 ORDER BY listPrice
-- Bài 3 3. Lấy ra danh sách sản phẩm mà tên có chứa chữ "o", thuộc danh mục "Basses", sắp xếp giảm dần theo tên
SELECT * FROM `products` INNER JOIN categories ON products.categoryID = categories.categoryID WHERE categories.categoryName = 'Basses' and productName LIKE '%o%' ORDER BY productName DESC
--Bài 4 4. Lấy ra danh sách sản phẩm mà khách hàng sử dụng gmail để mua
SELECT products.productName FROM products INNER JOIN orderitems ON products.productID = orderitems.productID INNER JOIN orders ON orderitems.orderID = orders.orderID INNER JOIN customers ON orders.customerID = customers.customerID WHERE customers.emailAddress LIKE '%@gmail.com'
-- Bài 5 5. Lấy ra danh sách sản phẩm có giá lơn hơn 300, đăng năm 2014, giới
SELECT * FROM `products` WHERE listPrice > 300 AND dateAdded LIKE '2014%' ORDER BY listPrice DESC LIMIT 4
-- Bài 6 Lấy ra tên thành phố mà khách hàng đã mua sản phẩm "Yamaha FG700S"
SELECT addresses.city FROM addresses INNER JOIN orders ON addresses.addressID = orders.shipAddressID INNER JOIN orderitems ON orders.orderID = orderitems.orderID INNER JOIN products ON orderitems.productID = products.productID WHERE productName LIKE "Yamaha FG700S"
