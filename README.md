# TP4DPBO2023C2
## Janji
Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Tugas Praktikum-4 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

## Deskripsi Program
1. Buatlah database berdasarkan kode tersebut
2. Ubah arsitektur project tersebut menggunakan MVC
3. Tambahkan tabel baru (1 - 2) yang berelasi dengan tabel yang sudah ada (Tabel dan Relasinya bebas ya)
4. Buat CRUD dari tabel  baru tersebut

## Desain Program
![image](https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/e6593f75-d844-4295-bc20-81e65bf591ad)

## Penjelasan Desain Program
Program ini terdiri dari 2 tabel, yaitu tabel members dan tabel job.
1. Tabel Members
   Tabel members terdiri dari 6 atribut, dimana atribut id_member merupakan primary key dari tabel ini. Selain itu, terdapat foreign key pada tabel ini, yaitu id_job yang menghubungkan tabel ini dengan tabel job dengan jenis relasi many to one. Pada program ini setiap member hanya dapat memiliki 1 pekerjaan, akan tetapi 1 pekerjaan dapat dimiliki oleh banyak member.
2. Tabel Job terdiri dari 3 atribut, dimana atribut id_job merupakan primary key dari tabel ini dan menjadi foreign key di tabel members.

## Penjelasan Alur
Ketika membuka program user akan diarahkan ke halaman home yang berisi daftar member. Pada setiap data member terdapat button edit, yang bilamana ditekan akan menampilkan form edit data member tersebut. Selain itu, juga terdapat button delete yang bilamana ditekan akan menghapus data member tersebut. Pada halaman home juga terdapat tombol "Add New Member", yang bilamana ditekan akan menampilkan form tambah data baru member. Pada navigation bar terdapat menu lain yaitu menu job yang bila dipilih akan menampilkan halaman yang berisi daftar data job. Pada halaman job user juga dapat menambah data dengan menekan tombol "Add new job", mengubah data dengan menekan button "Edit" dan menghapus data dengan menekan button "Delete". Apabila user telah selesai melihat halaman job, dan ingin kembali ke halaman home, user dapat memilih menu homme pada navigation bar.

## Dokumentasi
- Create Member
  ![AddMember](https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/e56f562a-b5b6-451a-b3fa-15a96b47626d)
  <br>
- Create Job
  ![AddJob](https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/43526309-757c-4e53-8bf8-667afb98bc08)
  <br>
- Read Member
  ![DaftarMember](https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/41e059aa-ef90-4565-94a1-41729ebc1cea)
  <br>
- Read Job
  ![DaftarJob](https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/4d5e7c32-0e66-4aab-82da-35e057477485)
  <br>
- Update Member
   ![EditMember](https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/0cad327a-ba30-4203-b598-f464bf423463)
  <br>
- Update Job
  ![EditJob](https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/7365d6cf-9f43-47af-b50a-6d83f8de904c)
  <br>
- Delete Member
  ![DeleteMember](https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/69a2b1af-9c4b-4154-932c-e905c3f97d81)
  <br>
- Delete Job
  ![DeleteJob](https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/06df8abc-9518-4e3f-8817-2f78d99ae7e3)
  
 ## Video Preview
 

https://github.com/miakarisma/TP4DPBO2023C2/assets/100817609/91774989-b817-43be-b64d-82696bf0faf6

