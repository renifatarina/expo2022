@extends('template.master')

@section('custom')
<div class="container faq">
    <h1 class="text-center">FAQ</h1>
    <div class="text-center">
        <a class="btn btn-primary" href="#" role="button" type="button" id="btn1">Apa perbedaan
            UKM/BSO/Himpunan/Komunitas?</a>
        <a class="btn btn-primary " href="#" role="button" type="button" id="btn2">Apakah ada jumlah maksimal pendaftaran?</a>
        <a class="btn btn-primary " href="#" role="button" type="button" id="btn3">Kalau gabung UKM/BSO/Himpunan/Komunitas, ganggu ngga sih buat
            kuliah?</a>
        <a class="btn btn-primary " href="#" role="button" type="button" id="btn4">Kalau ada EXPO, kuliahnya libur ngga?</a>
        <a class="btn btn-primary " href="#" role="button" type="button" id="btn5">Expo berapa hari sih?</a>
        <a class="btn btn-primary " href="#" role="button" type="button" id="btn6">Apa sih spesialnya EXPO?</a>
    </div>
</div>

@endsection

@push('atribut')
<script>
    const btn1 = document.getElementById('btn1');
    btn1.addEventListener('click', function () {
        Swal.fire({ 
            html: '<p class="text-justify">UKM(Unit Kegiatan Mahasiswa) dan BSO (Badan Semi Otonom) merupakan cikal bakal terbentuknya UKM. Namun UKM&BSO adalah organisasi dibawah koordinasi dan instruksi BEM dalam struktur LM Universitas AMIKOM Yogyakarta yang menangani hal-hal bersifat spesifik pada bidang tertentu sesuai dengan kerohanian, penalaran, kemampuan, keilmuan, minat dan bakat anggotanya.<br>Himpunan Mahasiswa adalah organisasi mahasiswa program studi yang terdapat pada LM Universitas AMIKOM Yogyakarta, berkedudukan dibawah instruksi Kepala Program Studi serta memiliki koordinasi dengan seluruh anggota LM dalam Struktur LM Universitas AMIKOM Yogyakarta.<br>Komunitas adalah komunitas yang ada dalam kampus dan sudah terdaftar di Universitas AMIKOM Yogyakarta, serta wadah pemersatu mahasiswa untuk dapat mengembangkan minat bakat dan keahlian dibidang masing-masing.</p>' ,
            showCancelButton: true,
            showConfirmButton:false,
            customClass: 'swal-wide',
            cancelButtonColor: "#ec6090",
        })
    })

    const btn2 = document.getElementById('btn2');
    btn2.addEventListener('click', function () {
        Swal.fire({ 
            html: 'Tidak ada jumlah maksimal. Asal harus komitmen, dan jangan lupa manajemen waktunya ya.' ,
            showCancelButton: true,
            showConfirmButton:false,
            customClass: 'swal-wide',
            cancelButtonColor: "#ec6090",
        })
    })

    const btn3 = document.getElementById('btn3');
    btn3.addEventListener('click', function () {
        Swal.fire({ 
            html: 'Kembali ke diri masing-masing mahasiswa, tergantung bagaimana cara mahasiswa itu sendiri mengelola waktunya dan sebisa mungkin menyesuaikan waktu kuliah dengan waktu di dalam organisasi. Namun justru dengan ikut organisasi akan bisa memanajemen waktu.' ,
            showCancelButton: true,
            showConfirmButton:false,
            customClass: 'swal-wide',
            cancelButtonColor: "#ec6090",
        })
    })

    const btn4 = document.getElementById('btn4');
    btn4.addEventListener('click', function () {
        Swal.fire({ 
            html: 'Perkuliahan tetap masuk, kalian bisa kepoin Expo pada saat jam kosong.' ,
            showCancelButton: true,
            showConfirmButton:false,
            customClass: 'swal-wide',
            cancelButtonColor: "#ec6090",
        })
    })

    const btn5 = document.getElementById('btn5');
    btn5.addEventListener('click', function () {
        Swal.fire({ 
            html: 'EXPO berlangsung 3 hari nih, dimulai dari tanggal 18-20 Oktober 2022. Jangan lupa dateng yaa!' ,
            showCancelButton: true,
            showConfirmButton:false,
            customClass: 'swal-wide',
            cancelButtonColor: "#ec6090",
        })
    })

    const btn6 = document.getElementById('btn6');
    btn6.addEventListener('click', function () {
        Swal.fire({ 
            html: 'EXPO akan memudahkan mahasiswa untuk mengetahui semua organisasi yang ada di kampus dan juga EXPO salah satu pintu masuk mahasiswa baru menuju UKM&BSO/Himpunan/Komunitas.' ,
            showCancelButton: true,
            showConfirmButton:false,
            customClass: 'swal-wide',
            cancelButtonColor: "#ec6090",
        })
    })


</script>
@endpush
