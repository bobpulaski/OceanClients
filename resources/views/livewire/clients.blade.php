<div>
    <h1>Список клиентов</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>inn</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->inn }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
