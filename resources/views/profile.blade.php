<x-layout>
    <x-slot:judul>{{$title}}</x-slot:judul>

    <h1>Profile:</h1>
    <p>Nama Lengkap: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <p>Sekolah: {{ $sekolah }}</p>
</x-layout>