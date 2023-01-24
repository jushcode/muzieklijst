<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>
    <!-- style sheet -->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <!-- Create header -->
    <header>
        <nav>   
            <ul>
                    <div class="search-container">
                         <form action="/action_page.php">
                             <span>
                                <input type="text" placeholder="Search..." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </form>
                    </div>
            </ul>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
            </ul>
            
        </nav>
    </header>
    <div class="view">
        <h2>Playlist > Songs</h2>   

    </div>
    <hr>
    <!-- Create content -->
    <div class="content">
        <div class="content-table">
            
            <table>
                <tr>
                    <th>id</th>
                    <th>name artist</th>
                    <th>music title</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Example artist</td>
                    <td>Calm & relaxing song</td>
                </tr>
                
            </table>
            <div class="view-buttons">
                    <div>
                        <button>Add song</button>
                    </div>
            </div>
        </div>
    </div>
        <!-- Add connection -->
</body>
</html>