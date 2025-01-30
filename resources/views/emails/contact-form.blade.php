
<div class="bg-gray-100 text-gray-800">
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <div class="text-center border-b border-gray-200 pb-4 mb-6">
            <h1 class="text-xl font-semibold text-blue-600">Thank You for Reaching Out!</h1>
        </div>
        <div class="space-y-4">
            <p class="text-lg">Hello <span class="font-semibold capitalize">{{ $data['name'] }}</span>,</p>
            <p><strong>Email: </strong> {{ $data['email'] }}</p>
            <p><strong>Message: </strong> {{ $data['message'] }}</p>
        </div>
        <div class="space-y-4">
            <p class="text-lg"><i>If you have any questions or need assistance, please contact me via email (jsodabas@gmail.com) or phone (0993-731-9157).We're ready to assist you.</i></p>
        </div>
        <div class="mt-6 text-center text-sm text-gray-500">
            <p>&copy; {{ date('Y') }} All rights reserved.</p>
        </div>
    </div>
</div>
