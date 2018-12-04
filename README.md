<h1>MyIBMt</h1>
<h3>Aplikasi Jadwal Kuliah</h3>
<p>
clone https://github.com/rundhik/myibmt

composer install

set .env sesuai petunjuk

</p>

<h1>Membangun Model</h1>


<h1>User Role Permission</h1>

<h1>Routing dan Controller</h1>
<h3>Membuat Controller untuk Admin</h3>
<p>
Membangun controller pada folder 'Admin' untuk memudahkan prefix / namespace sekaligus membedakan controller milik 'guest' dengan 'admin' atau 'staff akademik'
</p>
<pre>php artisan make:controller Admin\KurikulumController --resource</pre>
<pre>php artisan make:controller Admin\MataKuliahController --resource</pre>
<pre>php artisan make:controller Admin\DosenController --resource</pre>
<pre>php artisan make:controller Admin\RuangPerkuliahanController --resource</pre>
<pre>php artisan make:controller Admin\JadwalController --resource</pre>
<pre>php artisan make:controller Admin\UserController --resource</pre>
<p>
Mengatur route web di <code>routes/web.php</code>
</p>
<pre>
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::resource('kurikulum', 'KurikulumController');
    Route::resource('matakuliah', 'MataKuliahController');
    Route::resource('dosen', 'DosenController');
    Route::resource('ruangan', 'RuangPerkuliahanController');
    Route::resource('jadwal', 'JadwalController');
    Route::resource('user', 'UserController');
});
</pre>
<p>Cek di terminal dengan ketik <code>php artisan route:list</code></p>
<p>
<code>'prefix' => 'admin'</code> : parameter untuk membuat prefix 'admin' di URL, misal : http://localhost:8000/admin/kurikulum, http://localhost:8000/admin/dosen dsb.
<code>'namespace' => 'Admin'</code> : merubah default namespace controller Laravel. Default namespace Laravel ada pada folder <code>App\Http\Controller</code>. Sedangkan kita merubah namespace ke folder 'Admin', sehingga lokasi namespace kita adalah <code>MyIBMT\Http\Controller\Admin</code>
</p>

<p>Edit DosenController dan UserController untuk fungsi index, edit, show.</p>

<code>DosenController</code>
<pre>
    public function index()
    {
        return 'Halaman Utama Dosen';
    }

    //

    public function create()
    {
        return 'Halaman Create Dosen';
    }

    //

    public function show($id)
    {
        return 'Halaman untuk show / delete Dosen';
    }

    //

    public function edit($id)
    {
        return 'Halaman untuk edit user';
    }
</pre>

<code>UserController</code>
<pre>
    public function index()
    {
        return 'Halaman Utama User';
    }

    //

    public function create()
    {
        return 'Halaman Create User';
    }

    //

    public function show($id)
    {
        return 'Halaman untuk show / delete User';
    }

    //

    public function edit($id)
    {
        return 'Halaman untuk edit User';
    }
</pre>

<p>Untuk mencoba, akses <code>http://localhost/admin/dosen/ </code> untuk melihat halaman dosen (index).  Untuk halaman show dosen buka <code>http://localhost/admin/dosen/1 </code> dan untuk edit dosen <code>http://localhost/admin/dosen/1/edit </code>. Coba juga untuk halaman user</p>

<h3>Menerapakan User Role Permission</h3>

<p>
<strong>Membuat file 403 Forbidden (Permission Denied)</strong> : buat folder di <code>resources/views/errors</code> selanjutnya buat file <code>403.blade.php</code>. Edit file <code>403.blade.php</code>, isi semisal : Akses ditolak!
</p>
<p>
Edit file UserMigrationTables di <code>database/migrations</code>. Tambahkan baris<br/>
<pre>
$this->softDeletes();
</pre>
Kemudian lakukan migrations ulang dengan perintah <code>php artisan migrate:fresh --seed</code> (untuk melakukan migration ulang dan sekaligus melakukan seeding dari database seeding yang sudah ada)
</p>
<p>
Edit <code>DosenController</code>, tambahkan baris berikut di atas function index():
<pre>
    public function __construct()
    {
        $this->middleware('permission:create', ['only' => ['create', 'store']]);    
        $this->middleware('permission:edit', ['only' => ['edit', 'update']]);   
        $this->middleware('permission:delete', ['only' => ['show', 'delete']]);
    }
</pre>

<code>UserController</code>.
<pre>
    public function __construct()
    {
        $this->middleware('permission:users');
    }
</pre>
</p>

<p>
Coba akses URL lagi untuk memastikan user role sudah bekerja.
Selanjutnya.. 
</p>

<h3>Membuat user dengan role dan permission yang berbeda</h3>
<p>
Membuat user dengan role superadmin ( role id = 1 ) menggunakan <code>php artisan tinker</code>
<pre>
php artisan tinker

$user = new User
$user->name = 'Ngademin'
$user->email = 'ngademin@localhost.com'
$user->password = bcrypt('admin123')
$user->save()
$user->attachRole(1)
</pre>
</p>

Membuat user dengan role fakultas ( role id = 2 ) menggunakan <code>php artisan tinker</code>
<pre>
php artisan tinker

$user = new User
$user->name = 'Petugas Fakultas'
$user->email = 'fakultas@localhost.com'
$user->password = bcrypt('fakultas123')
$user->save()
$user->attachRole(2)
</pre>
</p>

<p>
Selanjutnya menghubungkan tiap role dengan permission. Lihat database untuk detailnya.
superadmin, id = 1, attachPermission id = 1, 2, 3, 4
fakultas, id = 2, attachPermission id = 1, 2

<pre>
php artisan tinker

$role = new Role
$role = $role->find(1)
$role->attachPermission(1)
$role->attachPermission(2)
$role->attachPermission(3)
$role->attachPermission(4)


$role = $role->find(2)
$role->attachPermission(1)
$role->attachPermission(2)
</pre>
</p>
<p>
Silahkan login ke aplikasi : http://localhost:8000/login sebagai superadmin. Setelah berhasil masuk, ketikan di URL secara manual ke routing web user dan dosen, http://localhost:8000/admin/user/create dan http://localhost:8000/admin/dosen/create untuk memastikan bahwa user tersebut memiliki hak akses penuh. Keluar aplikasi dengan ketik di URL http://localhost:8000/home, kemudian cari menu logout.

Selanjutnya login sebagai fakultas, dan akses dua alamat tadi. Seharusnya ketika user dengan role fakultas mengakses route web user, akses akan ditolak.
</p>