{{-- <div> --}}
    {{-- <p>Halliw</p> --}}
    {{-- @foreach ($studs as $stud) --}}
        {{-- <p>{{ $stud -> id}}. {{ $stud->name }}</p> --}}
        {{-- <p>Course: {{$stud -> course}}</p> --}}
        {{-- <p>DoB: {{$stud -> DOB}}</p> --}}
        {{-- <p>Email: {{$stud -> email}}</p> --}}
        {{-- <p>Phone: {{$stud -> phone}}</p> --}}
        {{-- <p>Active: {{$stud -> is_active}}</p> --}}
        {{-- <p>University: {{$stud -> university}}</p> --}}
        {{-- <p>------------------------------------------------------</p> --}}
    {{-- @endforeach --}}
{{-- </div> --}}
<script src="https://cdn.tailwindcss.com"></script>
<div class="container">
    <div class="grid h-screen place-items-center">
        <table class="table-auto border">
            <tr class="px-6 py-4 border">
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>DoB</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Active</th>
                <th>University</th>
            </tr>
            @foreach ($studs as $stud)
            <tr class="px-6 py-4 border">
                <td class="px-4 py-4">{{$stud -> id}}</td>
                <td class="px-4 py-4">{{$stud -> name}}</td>
                <td class="px-4 py-4">{{$stud -> course}}</td>
                <td class="px-4 py-4">{{$stud -> DOB}}</td>
                <td class="px-4 py-4">{{$stud -> email}}</td>
                <td class="px-4 py-4">{{$stud -> phone}}</td>
                <td class="px-4 py-4">{{$stud -> is_active ? 'True' : 'False'}}</td>
                <td class="px-4 py-4">{{$stud -> university}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
