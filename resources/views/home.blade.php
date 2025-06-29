<a href=""><h1>This is Home Page...</h1></a>


<x-validate-component message="Login user sucessfully" class="success" />
<br>
<x-validate-component message="Logout user sucessfully" class="logout" />
<br>
<br>
<x-validate-component message="Logout user sucessfully" class="error" />







<style>
    .success{
        background-color: green;
        color: white;
        /* padding: 10px;   */
        border-radius: 5px;
        text-align: center;
        font-weight: bold;     
    }

    .logout{
        background-color: orange;
        color: white;
        /* padding: 10px; */
        border-radius: 5px;
        text-align: center;
        font-weight: bold;     
    }



    .error{
        background-color: red;
        /* background-color: #f44336; */
        /* background-color: #e57373; */
        color: white;
        /* padding: 10px; */
        border-radius: 5px;
        text-align: center;
        font-weight: bold;     
    }
</style>

<a href="/welcome">Welcome</a> <br>
<a href="/about/{$name}">About</a>
