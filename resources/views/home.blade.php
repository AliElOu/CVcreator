<x-master title="Login" style="{{ asset('styles/registerStyle.css') }}">

    
    @section('main')
        <div class="m-3">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            
            <x-alert type="danger" text="Error!"/>
            <x-alert type="success" text="Ok!"/>
            <x-alert type="success" text="Ok!"/>
        
            <h1>Users</h1>
            <table border="1" class="table">
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                </tr>     
                @endforeach
            </table>
            {{ $users->links() }}
        </div>        
    @endsection
</x-master>