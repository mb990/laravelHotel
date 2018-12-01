@extends ('admin.admin')
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
</style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="text-center">List of registered users</h2>

                <table class="table1">
                    <tr>
                    </tr>
                    
                    @foreach($users as $user)
                        <tr>
                            <th class="text-center"><a href="/user/{{ $user->id }}">{{ $user->name }}</a></th>
                        </tr>
                    @endforeach                  
                </table>
            </div>
        </div>   
           <div class="lead pagination" style="padding-left: auto;"> {{ $users->links() }} </div>
    </div>
@endsection