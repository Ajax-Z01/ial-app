<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Updated</title>
</head>
<body>
    <h2>Conference Updated</h2>
    
    <p>Hi {{ $user->name }},</p>
    
    <p>The conference has been updated. Here are the details:</p>
    
    <ul>
        <li><strong>Title:</strong> {{ $conference->title }}</li>
        <li><strong>Description:</strong> {{ $conference->description }}</li>
        <li><strong>Location:</strong> {{ $conference->location }}</li>
        <li><strong>Date:</strong> {{ $conference->date }}</li>
        <li><strong>Time:</strong> {{ $conference->time }}</li>
        <li><strong>Link:</strong> {{ $conference->link }}</li>
    </ul>
    
    <p>Thank you.</p>
</body>
</html>
