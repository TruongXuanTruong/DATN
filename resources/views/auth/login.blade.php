<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg max-w-md w-full p-6 space-y-6">
            <!-- Tabs -->
            <div class="flex justify-center border-b pb-3">
                <button class="w-1/2 text-center font-semibold text-gray-700 border-b-2 border-blue-500">
                    Đăng Nhập
                </button>
                <button class="w-1/2 text-center font-semibold text-gray-500 hover:text-gray-700">
                    <a href="{{ route('register') }}">Đăng Ký</a>
                </button>
            </div>

            <!-- Form Content -->
            <div class="text-center">
                <h1 class="text-xl font-bold text-gray-800">Đăng Nhập Để Truy Cập</h1>
            </div>

            <!-- Login Form -->
            <form action="{{ route('login.action') }}" method="POST" class="space-y-4">
                    @csrf
                    @if ($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Lỗi!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li><span class="block sm:inline">{{ $error }}</span></li>
                                    @endforeach
                                </ul>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Đóng</title>
                                        <path
                                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                    </svg>
                                </span>
                            </div>
                    @endif
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200 focus:outline-none">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Mật khẩu</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200 focus:outline-none">
                </div>

            <!-- Separator -->
                <div class="flex items-center justify-between my-4">
                    <span class="border-t border-gray-300 w-1/5"></span>
                    <span class="text-gray-400 text-sm">Hoặc</span>
                    <span class="border-t border-gray-300 w-1/5"></span>
                </div>
            {{-- Form GG và FB --}}
            <button class="w-full flex items-center bg-blue-700 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-800">
                <img src="{{ asset('img/logo_face.png') }}" alt="Facebook Logo" class="w-6 h-6 mr-3">
                <span class="text-sm font-medium">Login with Facebook</span>
            </button>

            <!-- Google Button -->
            <button class="w-full flex items-center border-2 border-gray-300 py-2 px-4 rounded-md shadow-md hover:bg-gray-50">
                <img src="{{ asset('img/logo_google.webp') }}" alt="Google Logo" class="w-6 h-6 mr-3">
                <span class="text-sm font-medium">Login with Google</span>
            </button>

            {{-- Phần cuối --}}
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="mr-2 rounded border-gray-300 focus:ring-blue-500">
                        <span class="text-sm text-gray-600">Ghi nhớ đăng nhập</span>
                    </label>
                    <a href="#" class="text-sm text-blue-500 hover:underline">Quên mật khẩu?</a>
                </div>
                <button type="submit"
                    class="w-full py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-300">
                    Đăng Nhập
                </button>
            </form>

            <p class="text-sm text-center text-gray-500">
                Bạn chưa có tài khoản? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Đăng ký</a>
            </p>
        </div>
    </section>
</body>

</html>
