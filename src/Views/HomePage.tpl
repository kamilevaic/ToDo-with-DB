
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    {block name="css"}
        <link rel="stylesheet" href="./src/assets/css/homepage.css" media="all"/>
    {/block}
</head>
<body>
<header>
    <div class="topnav">
        <a class="active" href="/todo/list">ToDo's List</a>
    </div>
</header>
<main>
   <table>
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Description</th>
           <th>Active</th>
           <th>Created At</th>
           <th>Updated At</th>
       </tr>
       {foreach $tasks as $task}
           <td>{$task.id}</td>
           <td>{$task.name}</td>
           <td>{$task.description}</td>
           <td>{$task.active}</td>
           <td>{$task.created_at}</td>
           <td>{$task.updated_at}</td>
       {/foreach}
   </table>
</main>
</body>
</html>