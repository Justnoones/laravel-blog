@props(['categories', 'currentCategory'])

<script type="text/javascript">
    const toggle = () => {
        const ddm = document.querySelector('#dropdownmenu');
        if (ddm.classList.contains('hidden')) {
            ddm.classList.remove('hidden');
        } else {
            ddm.classList.add('hidden');
        }
    }
</script>

<div class="relative inline-block text-left">
    <div>
      <button onclick=toggle() type="button" class="bg-yellow-300 inline-flex px-3 py-2 items-center gap-x-2 rounded-lg">
        {{isset($currentCategory) ? $currentCategory->name : 'Filter By Category'}}
        <svg class="-mr-1 h-5 w-5 text-black" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>
    <div id="dropdownmenu" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-yellow-300 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
      <div class="py-1">
        <a href="/" class="text-gray-700 block px-4 py-2 text-sm">All</a>
        @foreach ($categories as $category)
            <a href={{'/categories/'.$category->slug}} class="text-gray-700 block px-4 py-2 text-sm">{{$category->name}}</a>
        @endforeach
        </form>
      </div>
    </div>
  </div>
