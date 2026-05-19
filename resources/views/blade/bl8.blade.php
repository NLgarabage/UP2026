<x-layout>

    <table border="1px">
        <thead>
            <tr>
                <td colspan="2">Users</td>
                <td colspan="3">Profile</td>
                <tr>
                    <td>Password</td>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Email</td>
                </tr>
            </tr>
                
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->password }}</td>
                <td>{{ $user->profiles->name }}</td>
                <td>{{ $user->profiles->surname }}</td>
                <td>{{ $user->profiles->email }}</td>
            </tr>
        </tbody>
    </table>
    <table border="1px">
        <thead>
            <tr>
                <td colspan="2">Users</td>
                <td colspan="3">Profile</td>
                <tr>
                    <td>Login</td>
                    <td>Password</td>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Email</td>
                </tr>
            </tr>
                
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->login }}</td>
                    <td>{{ $user->password }}</td>
                    @foreach ($user->profiles as $profile)
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->surname }}</td>
                        <td>{{ $profile->email }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <table border="1px">
        <thead>
            <tr>
                <td colspan="2">Users</td>
                <td colspan="3">Profile</td>
                <tr>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Email</td>
                    <td>Login</td>
                    <td>Password</td>
                </tr>
            </tr>
                
        </thead>
        <tbody>
            <tr>
                <td>{{ $profiles->name }}</td>
                <td>{{ $profiles->surname }}</td>
                <td>{{ $profiles->email }}</td>
                <td>{{ $profiles->users->login }}</td>
                <td>{{ $profiles->users->password }}</td>
            </tr>
        </tbody>
    </table>
        <table border="1px">
            <thead>
                <tr>
                    <th colspan="3">User</th>
                    <th colspan="2">Profile</th>
                    <tr>
                        <td>Name</td>
                        <td>Surname</td>
                        <td>Email</td>
                        <td>Login</td>
                        <td>Password</td>
                    </tr>
                </tr>
            </thead>
            <tbody>
            @foreach ($profiles as $profile)
                <tr>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->surname }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>{{ $profile->users->password }}</td>
                    <td>{{ $profile->users->login }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    @foreach ($countries as $country)
    <div>
        <h2>{{$country->name}}</h2>
        <ul>
            @foreach ($country->cities as $city)
                <li>{{$city->name}}</li>
            @endforeach
        </ul>
    </div>
    @endforeach
    <table border="1px">
        <thead>
            <tr>
                <td>Country</td>
                <td>City</td>
                <td>Population</td>
            </tr>
        </thead>
        <tbody>

            @foreach ($countries as $country)
                <h2>{{$country->name}}</h2>
                <tr>
                    @foreach ($country->cities as $city)
                        @if ({{$city->population > 100000}})
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->population }}</td>
                        @else
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <table border="1px">
        <thead>
            <tr>
                <td>Country</td>
                <td>City</td>
                <td>Population</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>{{ $city->country->name }}</td>
                    <td>{{ $city->name }}</td>
                    <td>{{ $city->population }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table border="1px">
        <thead>
            <tr>
                <td>ID</td>
                <td>City</td>
                <td>Country</td>
            </tr>
        </thead>
        <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->country->name }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    
    <table border="1px">
        <thead>
            <tr>
                <td>Country</td>
                <td>City</td>
                <td>Population</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
                <h2>{{$country->name}}</h2>
                <tr>
                    @foreach ($country->cities as $city)
                        @if ({{$city->population > 100000}})
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->population }}</td>
                        @else
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    <table border="1px">
        <thead>
            <tr>
                <td>User</td>
                <td>Position</td>
                <td>City</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->position->name }}</td>
                    <td>{{ $user->city->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table border="1px">
        <thead>
            <tr>
                <td>User</td>
                <td>Roles</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    @foreach ($user->roles as $positions)<td>{{ implode(',',$positions->name )}}</td>@endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>

