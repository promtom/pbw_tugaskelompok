# Tugas Akhir Pemograman Berbasis Web

### Desktripsi
Sebuah website forum wisata daerah. Untuk link yang sudah di hosting di 
[pbwnews](https://pbwnewss.000webhostapp.com/ "pbwnews")

### Dosen
- [Pak Yaddarunullah](https://github.com/yaddarabullah "Pak Yaddarunullah")

### Anggota Kelompok
- [Aldi Mulia WIjaya](https://github.com/promtom "Aldi Mulia WIjaya")
- [Muhammad Rafif](https://github.com/MRafif950 "Muhammad Rafif")

### Credit
- [Codeigniter](https://codeigniter.com/download/ "Codeigniter")
- [CKeditor](https://ckeditor.com/ "CKeditor")
- [Template Atlantis](https://themekita.com/demo-atlantis-lite-bootstrap/ "Template Admin Atlantis")

# Setting PBWnews

### Database
Silahakan import file **pbw.sql** ke dalam database dengan nama **pbw**.

### CKEditor
Silahkan ke folder **assets/js/plugin/editor/ckeditor/confiq.js** dan cari kode seperti dibawah ini.

```php
        config.filebrowserBrowseUrl		= 'http://localhost/Kuliah/PBW/PBWnews/assets/js/plugin/editor/kcfinder/browse.php?type=files';
        config.filebrowserImageBrowseUrl	= 'http://localhost/Kuliah/PBW/PBWnews/assets/js/plugin/editor/kcfinder/browse.php?type=images';
        config.filebrowserFlashBrowseUrl	= 'http://localhost/Kuliah/PBW/PBWnews/assets/js/plugin/editor/kcfinder/browse.php?type=flash';
        config.filebrowserUploadUrl		= 'http://localhost/Kuliah/PBW/PBWnews/assets/js/plugin/editor/kcfinder/upload.php?type=files';
        config.filebrowserImageUploadUrl	= 'http://localhost/Kuliah/PBW/PBWnews/assets/js/plugin/editor/kcfinder/upload.php?type=images';
        config.filebrowserFlashUploadUrl	= 'http://localhost/Kuliah/PBW/PBWnews/assets/js/plugin/editor/kcfinder/upload.php?type=flash';
```
Ganti **http://localhost/Kuliah/PBW/PBWnews/** dengan URL dimana Anda menyimpan folder ini


### Akun

 <table>
 <thead>
 <tr>
     <th>Username</th>
     <th>Password</th>
     <th>Level</th>
 </tr>
 </thead>
 <tbody>
 <tr>
     <th>admin</th>
     <th>admin</th>
     <th>admin</th>
 </tr>
  <tr>
     <th>user</th>
     <th>qwerty</th>
     <th>user</th>
 </tr>
 </tbody>
</table>

### laman
Kami miiliki 2 tampilan yakni:
(url)/admin/login   ==> dashboard admin
(url)               ==> tampilan pbwnews
