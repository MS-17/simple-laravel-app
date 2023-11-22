@extends('layouts.base')
@section('users_table')
    <div class="users-table">
        <h1>Users table</h1>
        @php
            $titles = array_keys((array)$data[0]);
        @endphp
        <table>
            <tr>
                @foreach($titles as $title)
                    <th>{{ $title }}</th>                    
                @endforeach
            </tr>

            @foreach($data as $user)
                <tr>
                    <td>{{ $user -> name }}</td>
                    <td>{{ $user -> lastname }}</td>
                    <td>{{ $user -> email }}</td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection

