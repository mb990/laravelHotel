@extends('layout.app')
<?php $title = 'Users' ?>
@include ('includes.pageheading')
@section('content')

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<div class="container text-center">
    

        <table class="pagination">
            <tr>
                <th class="text-center">User</th>
                <th class="text-center">Email</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </table>
    <div>
        <p> {{ $users->links() }} </p>
    </div>
</div>
@endsection
