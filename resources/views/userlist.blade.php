

<div class="container">
    <div class="row">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td><a href="/adduser/{{$user->id}}" class="hero-buttons">Add me</a></td>
                    </tr>
                @endforeach
            </table>

        <ul>



        </ul>

    </div>
</div>