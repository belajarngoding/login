Login menggunakan PHP dan MySQL
=========

Repository ini merupakan source code untuk tulisan
```sh
http://belajarngoding.com/membuat-halaman-login-menggunakan-php-dan-mysql/
```

Pembuatan halaman sederhana untuk menghandle login, dan logout menggunakan session. Setelah mendownload source code ini silahkan buat database dengan nama "cms" kemudian buatlah tabel "user"

```sh
CREATE TABLE `user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `user` VALUES(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');
```

untuk password "5f4dcc3b5aa765d61d8327deb882cf99" merupakan md5 dari kata password, untuk demo silahkan login menggunakan info dibawah ini
```sh
username: admin
password: password
```

License
=========
MIT

