@extends('layout.app')
<?php $title = 'Users' ?>
@include ('includes.pageheading')
@section('content')

<style>
    .table1 {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: auto;
        margin: auto;
    }
     th {
        border: 3px solid black;
        text-align: left;
        padding: 8px;
        width:300px;
    }
    .td1 {
        border: 1px solid black;
        text-align: left;
        padding: 8px;
        width:300px;
    }
    
    tr:nth-child(even) {     /*  OVO NAPRAVI SVAKI DRUGI RED DA BUDE BELE BOJE  */
        background-color: #dddddd;
    }
    .links{
        margin:auto;
    }
    h2{
        margin-left: 300px;
    }
</style>

    <div class="container">
        <h2>List of registered users</h2>

        <table class="table1">
            <tr>
                <th class="text-center">User</th>
                <th class="text-center">Email</th>
            </tr>
            
            @foreach($users as $user)    
                <tr>
                    <td class="td1">{{ $user->name }}</td>
                    <td class="td1">{{ $user->email }}</td>
                </tr> 
            @endforeach                  
        </table>
        <table class="links">
            <td> {{ $users->links() }} </td>
        </table>
    </div>
@endsection
