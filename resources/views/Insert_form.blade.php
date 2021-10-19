<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://parsleyjs.org/dist/parsley.js"></script>

  <style>
  ::-webkit-calendar-picker-indicator {
    filter: invert(0);
    color: gray;
}
</style>

</head>


<body>


<div class="md:p-12 bg-gradient-to-br from-green-100 to-blue-100 flex flex-row flex-wrap ">   


  <div class="relative mx-6 max-w-3xl md:mx-auto w-full md:w-1/2 lg:w-full z-20 m-8 ">
    <div class="shadow-lg bg-white rounded-2xl p-8">
      
      <h1 class="text-center text-2xl font-bold text-green-700">Add User</h1>
    
        <div class="relative p-2 flex-auto">
        	

          <form class="pt-6 pb-2 my-2 grid grid-cols-2 gap-5 justify-end  border-t border-solid border-gray-200 rounded-b" action="/formstore" method="POST" enctype="multipart/form-data"  id="validate_form">
          {{csrf_field() }}
              <input type="hidden" name="id"> 

              <div class="mb-4">
                  <label class="block text-sm font-bold mb-2 text-gray-500" for="FirstName">
                      First Name
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-1.5 px-3 text-grey-darker" type="text" name="FirstName"  value="{{old('FirstName')}}" placeholder="First Name">
                  @error('FirstName')
                  <span class="text-sm text-red-600" id="error">{{$message}} </span>
                  @enderror
              </div>

              <div class="mb-4">
                  <label class="block text-sm font-bold mb-2 text-gray-500" for="LastName">
                      Last Name
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-1.5 px-3 text-grey-darker" type="text" name="LastName"  value="{{old('LastName')}}" placeholder="Last Name">
                  @error('LastName')
                  <span class="text-sm text-red-600" id="error">{{$message}} </span>
                  @enderror
              </div>

              <div class="mb-4">
                <label class="block text-sm font-bold mb-2 text-gray-500" for="DateOfBirth">
                  Date of Birth
                </label>
                <input type="date" name="DateOfBirth" value="{{old('DateOfBirth')}}" class=" shadow appearance-none border rounded w-full py-1.5 px-3 text-grey-darker" placeholder="">
                @error('DateOfBirth')
                  <span class="text-sm text-red-600" id="error">{{$message}} </span>
                @enderror
              </div>

              <fieldset class="mb-4">
                  <legend class="block text-sm font-bold mb-2 text-gray-500">Gender:</legend>
                  <div class="block pt-3 pb-2 space-x-4">

                    <label class=" text-gray-500">
                      <input type="radio" name="Gender" value="Male" <?php if(old('Gender')=='Male'){ echo "checked"; } ?> class="mr-2 ml-2 text-gray-500 border-2 border-gray-300 focus:border-gray-300 focus:ring-black"/>
                      Male
                    </label>

                    <label class="text-gray-500">
                      <input type="radio" name="Gender" value="Female" <?php if(old('Gender')=='Female'){ echo "checked"; } ?> class="mr-2 text-gray-200 origin border-2 border-gray-300 focus:border-gray-300 focus:ring-black"/>
                      Female
                    </label>

                    <label class="text-gray-500">
                      <input type="radio" name="Gender" value="Others" <?php if(old('Gender')=='Others'){ echo "checked"; } ?> class="mr-2 text-gray-200 origin border-2 border-gray-300 focus:border-gray-300 focus:ring-black"/>
                      Others
                    </label>

                  </div>
                  @error('Gender')
                  <span class="text-sm text-red-600" id="error">{{$message}} </span>
                  @enderror
                </fieldset>
              
              <div class="mb-4">
                <label class="block text-sm font-bold mb-2 text-gray-500" for="Email">
                  Email
                </label>
                <input type="text" name="Email" value="{{old('Email')}}" class="shadow appearance-none border rounded w-full py-1.5 px-3 text-grey-darker" placeholder="example@gmail.com">
                @error('Email')
                  <span class="text-sm text-red-600" id="error">{{$message}} </span>
                @enderror
              </div>
              
              <div class="mb-4">
                <label class="block text-sm font-bold mb-2 text-gray-500" for="ContactNumber">
                  Contact Number 
                </label>
                <input type="text" name="ContactNumber" value="{{old('ContactNumber')}}" class="shadow appearance-none border rounded w-full py-1.5 px-3 text-grey-darker" placeholder="0712345678">
                @error('ContactNumber')
                  <span class="text-sm text-red-600" id="error">{{$message}} </span>
                @enderror
              </div>

              <div class="mb-4">
                <label class="block text-sm font-bold mb-2 text-gray-500" for="password">
                  Password
                </label>
                <input type="password" name="password"  class="shadow appearance-none border rounded w-full py-1.5 px-3 text-grey-darker" placeholder="password">
                @error('password')
                  <span class="text-sm text-red-600" id="error">{{$message}} </span>
                @enderror
              </div>
          
              <div class="mb-4">
                <label class="block text-sm font-bold mb-2 text-gray-500" for="password_confirmation">
                  Confirm Password
                </label>
                <input type="password" name="password_confirmation" class="shadow appearance-none border rounded w-full py-1.5 px-3 text-grey-darker" placeholder="password">
                @error('password')
                  <span class="text-sm text-red-600" id="error">{{$message}} </span>
                @enderror 
              </div>
              
        </div>
                <!--footer-->
                <div class="flex items-center justify-end p-1 border-t border-solid border-gray-200 rounded-b">
                  <a href="/" class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                    Cancel
                  </a>
                  <button class="bg-green-700 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit" name="submit" >
                  Insert
                  </button>
                </div>

              
          </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>