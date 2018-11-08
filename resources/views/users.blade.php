@extends('layout.app')
<?php $title = 'Users' ?>
@include ('includes.pageheading')
@section('content')
<div class="container">
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
        {{ $users->links() }}   
</div>
@endsection
