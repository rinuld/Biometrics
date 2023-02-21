<!DOCTYPE html>
<html>
    <head>
        <title>Biometrics - Time In and Time Out</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="views/assets/css/styles.css">
		<link rel="stylesheet" type="text/css" href="views/assets/css/tailwind.css">
    </head>
    
    <body>
        <div class="bg-no-repeat bg-left w-full h-screen " style="background-image: url('views/assets/images/biometrics.jpg');">
            <div class="bg-black w-screen h-screen items-center justify-center flex bg-opacity-25">
				<div id="Title" class="text-center px-1 mx-8 text-white grid grid-cols-2">
					<div class="text-left mr-48">
						<h1 class="text-6xl font-bold uppercase">Biometrics</h1>
						<p class="text-xl"><em>Time in and Time Out</em></p>

						<form class="pt-5">
							<div class="relative">
								<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
									<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
								</div>
								<div class="flex flex-col justify-center items-end">
									<input type="search" id="searchEmpID" class="flex text-black text-sm w-full p-4 pl-10 rounded-full focus:ring-blue-500" placeholder="Search Employee ID" required>
									<button type="submit" class="m-1 text-white absolute bg-purple-500 hover:bg-purple-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">Search</button>
								</div>
							</div>
						</form>
					</div>
					<div class=""></div>
				</div>
			</div>
        </div>
    </body>
</html>