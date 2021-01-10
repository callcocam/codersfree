<x-app-layout>
    <div class="container grid grid-cols-5 py-8">
        <aside>
            <h1 class="mb-4 text-lg font-bold">Edição do curso</h1>
            <ul class="text-sm text-gray-600">
                <li class="pl-2 mb-1 leading-7 border-l-4 border-indigo-400">
                    <a href="">Informação do curso</a>
                </li>
                <li class="pl-2 mb-1 leading-7 border-l-4 border-transparent">
                    <a href="">Lições do curso</a>
                </li>
                <li class="pl-2 mb-1 leading-7 border-l-4 border-transparent">
                    <a href="">Metas do curso</a>
                </li>
                <li class="pl-2 mb-1 leading-7 border-l-4 border-transparent">
                    <a href="">Estudantes do curso</a>
                </li>
            </ul>
        </aside>
        <div class="col-span-4 card">
            <div class="text-gray-600 card-body md-6">
                <h1 class="text-2xl font-bold">INFORMAÇÕES DO CURSO</h1>
                <hr class="mt-2 mb-6">
                {!! Form::model($course, ['route'=>['instructor.courses.update', $course], 'method'=>'PUT','files'=>true]) !!}
                 @include('instructor.courses.partials.form')
                <div class="flex justify-end">
                    {!! Form::submit("Update course information", ['class'=>'btn btn-blue cursor-pointer']) !!}
                 </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/instructor/courses/form.js')}}"></script>
    </x-slot>
</x-app-layout>