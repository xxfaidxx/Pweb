<div class="tabs">
    <button class="tab active">SD</button>
    <button class="tab" onclick="loadContent('/smp')">SMP</button>
    <button class="tab" onclick="loadContent('/sma')">SMA</button>
</div>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Asal</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->asal_sekolah }}</td>
                <td>{{ $user->jenis_kelamin }}</td>
                <td>{{ $user->jenjang }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
