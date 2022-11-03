                
  <div x-data="{active:true}" class="mt-5">
    <label class="inline-flex items-center space-x-2">
      <input
        x-model="active"
        class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
        type="checkbox"
      />
      <span>Option</span>
    </label>
    <p class="mt-2">Value: <span x-text="active"></span></p>
  </div>