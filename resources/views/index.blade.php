<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <h1>Contact Management</h1>
    <form method="post" action="/store_contact">
        @csrf

        Name: <input type="text" name="contact_name" id="name"/><br /><br/>

        Contact: <input type="text" name="contact_detail" /><br /><br/>

        <button type="submit">Add</button>
        <button><a href="/reset_contacts">Reset</a></button>
        <button data-empty class="not-empty">Delete</button>
        <button data-empty class="not-empty">Edit</button>
        <button data-empty class="not-empty">Update</button><br/><br/>
        Search <input type="text" /><br/><br/>
    </form>

    <table>
        <tr>
            <th>Name</th>
            <th>Contact</th>
        </tr>
        @foreach($contacts as $contact)
            <tr onclick="handleClick(event, {{$contact->id}})">
                <td>{{$contact->contact_name}}</td>
                <td>{{$contact->contact_detail}}</td>
            </tr>
        @endforeach
    </table>
    <script src="./js/script.js"></script>
</body>
</html>