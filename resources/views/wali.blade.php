<x-layout>
    <x-slot:judul>{{$title}}</x-slot>
      <style>
        * {
            color: black;
        }

        table,
        th,
        td {
            border: 2px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
    <table>
        <thead>
            <tr>
               <th>No</th>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guardians as $walis)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $walis['name'] }}</td>
                <td>{{ $walis['job'] }}</td>
                <td>{{ $walis['phone'] }}</td>
                <td>{{ $walis['email'] }}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>