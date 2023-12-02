<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col justify-center items-center h-screen">
        <img src="assets/login/profil.png" alt="profil" class="scale-75">
        <form action="loginProses.php" method="post">
            <div class="max-w-screen-sm bg-white rounded-[62px] border-4 border-sky-600 flex justify-center items-center">
                <div class="flex flex-col p-10">
                    <label for="username" class="text-neutral-400 text-2xl font-normal font-['Inter'] m-auto">Username:</label>
                    <input type="text" id="username" name="username" class="w-[250px] h-[40px] border border-neutral-400 rounded-[10px] pl-1"/>
                    <label for="password" class="text-neutral-400 text-2xl font-normal font-['Inter'] m-auto mt-[10px]">Password:</label>
                    <input type="password" id="password" name="password" class="w-[250px] h-[40px] border border-neutral-400 rounded-[10px] pl-1"/>
                    <input type="submit" class="w-[180px] h-[50px] items-center bg-sky-600 rounded-[31px] text-white text-2xl font-normal font-['Inter'] m-auto mt-5 hover:bg-sky-700" value="Login" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>
