# laravel-event
Create Laravel Events

**Creating Event class** 

 *php artisan make:event BlogEvent*
 
**Creating Listeners Class**

 *php artisan make:listener BlogListener*
 
 **Registered EventServiceProvider**
 
 Let's see $listen array in EventServiceProvider.php where we can registered events of our application.

```
protected $listen = [
        'App\Events\BlogEvent' => [
            'App\Listeners\BlogListener',
        ],
    ];
```

**Include your Event class file via use**

	*use App\Events\BlogEvent;*
  
**Update Event Class**

	 public $tag;
   
```
    public function __construct(Tag $tag)
    {   
        $this->tag = $tag;     
    }
```
  Mostly it is just a data transfer object, or container for our event.
  
**Update Listener Class** 
	
	Our Event class is already type hinted for us on the handle() method

	public function handle(BlogEvent $event)
  
