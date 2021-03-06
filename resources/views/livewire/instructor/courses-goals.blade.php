<article>
   <h1 class="text-2xl font-bold">METAS DO CURSO</h1>
   <hr class="mt-2 mb-6">
   @foreach ($course->goals as $item)
       <article class="mb-4 card">
           <div class="bg-gray-100 crad-body">
               @if ($goal->id == $item->id)
                   <form wire:submit.prevent="update">
                       <input wire:model="goal.name" type="text" class="w-full form-input">
                        @error('goal.name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror
                   </form>
               @else
                <header class="flex justify-between px-4 py-2">
                    <h1>{{ $item->name }}</h1>
                    <div>
                        <i wire:click="edit({{$item}})" class="text-blue-500 cursor-pointer fas fa-edit"></i>
                        <i wire:click="destroy({{$item}})" class="ml-2 text-red-500 cursor-pointer fas fa-trash"></i>
                    </div>
                </header>
               @endif
           </div>
       </article>
   @endforeach
   <article class="card">
       <div class="bg-gray-100 card-body">
           <form wire:submit.prevent="store">
                <input wire:model="name" type="text" class="w-full form-input" placeholder="Adicionar nome para a meta">
                @error('name')
                    <span class="text-sm text-red-500">{{$message}}</span>
                @enderror
                <div class="flex justify-end mt-2">
                    <button class="btn btn-blue">Adicionar meta</button>
                </div>
           </form>
       </div>
   </article>
</article>
