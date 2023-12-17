<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Sales Register Page</title>
    @vite('resources/css/app.css')
    @vite('resources/css/glass.css')
</head>
<body class="bg-gradient-to-br from-rose-50 to-indigo-50 w-full h-full flex items-center justify-center p-8">

    <form action="{{  route('register.post')  }}" method="post" class="w-full h-full flex flex-col max-w-2xl items-center justify-center">

        @csrf

        <div class="w-full h-full justify-center grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-5">

            <h1 class="sm:text-6xl text-4xl font-bold text-slate-800 text-center sm:col-span-2">
                Contact Sales
            </h1>

            <p class="text-slate-700 text-xs sm:text-sm font-semibold text-center sm:col-span-2 mt-2 mb-5">
                Aute manga irue deserunt veniam aliqua manga enim voluptate
            </p>

            <label for="first_name" class="font-semibold">
                First name
                <input
                    type="text"
                    name="first_name"
                    class="rounded-md bg-white w-full px-3 py-3 outline-none
                        appearance-none focus:ring-2 focus:ring-rose-400/80
                        transition-all duration-700 mt-2">

                @error('first_name')
                <p class="text-sm font-semibold text-rose-500 ml-1 mt-3">{{ $message }}</p>
                @enderror
            </label>

            <label for="last_name" class="font-semibold">
                Last name
                <input
                    type="text"
                    name="last_name"
                    class="rounded-md bg-white w-full px-3 py-3 outline-none
                        appearance-none focus:ring-2 focus:ring-rose-400/80
                        transition-all duration-700 mt-2">

                @error('last_name')
                <p class="text-sm font-semibold text-rose-500 ml-1 mt-3">{{ $message }}</p>
                @enderror
            </label>

            <label for="company" class="font-semibold sm:col-span-2">
                Company
                <input
                    type="text"
                    name="company"
                    class="rounded-md bg-white w-full px-3 py-3 outline-none
                        appearance-none focus:ring-2 focus:ring-rose-400/80
                        transition-all duration-700 mt-2">

                @error('company')
                <p class="text-sm font-semibold text-rose-500 ml-1 mt-3">{{ $message }}</p>
                @enderror
            </label>

            <label for="email" class="sm:font-semibold sm:col-span-2">
                Email
                <input
                    type="email"
                    name="email"
                    class="rounded-md bg-white w-full px-3 py-3 outline-none
                        appearance-none focus:ring-2 focus:ring-rose-400/80
                        transition-all duration-700 mt-2">

                @error('email')
                <p class="text-sm font-semibold text-rose-500 ml-1 mt-3">{{ $message }}</p>
                @enderror
            </label>

            <label for="mobile" class="font-semibold sm:col-span-2">
                Phone number
                <input
                    type="tel"
                    name="mobile"
                    class="rounded-md bg-white w-full px-3 py-3 outline-none
                        appearance-none focus:ring-2 focus:ring-rose-400/80
                        transition-all duration-700 mt-2">

                @error('mobile')
                <p class="text-sm font-semibold text-rose-500 ml-1 mt-3">{{ $message }}</p>
                @enderror
            </label>

            <label for="message" class="font-semibold sm:col-span-2">
                Message
                <textarea
                    type="text"
                    name="message"
                    class="rounded-md bg-white w-full h-24 px-3 py-3 outline-none
                        appearance-none focus:ring-2 focus:ring-rose-400/80
                        transition-all duration-700 mt-2">
                    </textarea>
            </label>

            <label for="password" class="font-semibold sm:col-span-2">
                Password
                <input
                    type="password"
                    name="password"
                    class="rounded-md bg-white w-full px-3 py-3 outline-none
                        appearance-none focus:ring-2 focus:ring-rose-400/80
                        transition-all duration-700 mt-2">
            </label>

            <label for="password_confirmation" class="font-semibold sm:col-span-2">
                Password Confirmation
                <input
                    type="password"
                    name="password_confirmation"
                    class="rounded-md bg-white w-full px-3 py-3 outline-none
                        appearance-none focus:ring-2 focus:ring-rose-400/80
                        transition-all duration-700 mt-2">

                @error('password')
                <p class="text-sm font-semibold text-rose-500 ml-1 mt-3">{{ $message }}</p>
                @enderror
            </label>

            <button type="submit" class="font-semibold bg-rose-500 text-white rounded-md px-3 py-2 w-full
                 sm:col-span-2 hover:bg-rose-600 transition-all duration-700">
                Let's Talk
            </button>

        </div>

    </form>

</body>
</html>
