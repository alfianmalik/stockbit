============================================================
MYSQL
============================================================

```sql
SELECT parent.id, parent.UserName, child.UserName as `ParentUserName`
    FROM USERS AS parent
         LEFT JOIN USERS AS child
         ON child.parent = parent.id
ORDER BY parent.id, child.id;

```

============================================================
DevOps
============================================================

1. Di setting mana kita bisa maksimalin kemampuan satu Linux Server untuk bisa handle long-living connections yang tersambung secara bersamaan.

```markdown
Di Load Balancers di bagian TCP Connection

```

2. Jelaskan scr singkat kenapa di AWS kita perlu Docker instead of cuman bikin AMI Image dr 1 server
```markdown
Docker merupakain Containerized Platform yang berjalan di atas OS.
Keuntungan menggunakan docker adalah karena menggunakan konsep kontainer dimana setiap aplikasi di isolasi di setiap wadah(container), maka akan terjaganya keamanan setiap aplikasi tersebut.
Kemampuan lain yaitu jika kita memiliki bahasa pemrogramaan yang berbeda dalam satu server docker dapat memudahkan penginstalaan maupun running-nya sebuah bahasa perogramanan tanpa adanya conflict dari satu bahasa pemrograman dengan bahasa pemrograman lain 

```

3. Untuk Security Server, kira2 langkah apa aja yg bisa dilakukan untuk menjamin keamanan satu server ?

```markdown
Dari sisi Server:
1. Gunakan password untuk masuk server memiliki kata sandi yang sangat kuat (character khusus, hurus besar kecil)
2. Gunakan firewall
3. Menggunakan port yang berdebda untuk login kedalam vps menggunakan SSH
4. Membatasi juga jumlah login yang gagal
5. Selalu update sistem OS
6. Gunakan selalu enkripsi dalam pengiriman data kedalam server (Gunakan VPN)

Dari sisi aplikasi:
1. Gunakan SSL
2. Gunakan CRSF setiap form
3. Validasi setiap request yang masuk

```
