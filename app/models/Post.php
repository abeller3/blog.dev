<?php

class Post extends BaseModel 
{
	//The db table this model relates to 
    protected $table = 'posts';

    //db where we will store all images
    protected $imgDir = 'img-upload';

    //Validation rules for our model properties 
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];

	public function user()
	{
    	return $this->belongsTo('User');
	}

    //image is associated with post(DRY)
    public function addUploadedImage($image) 
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';

        $imageName = $this->id . '-' . $image->getClientOriginalName();

        $image->move($systemPath, $imageName);

        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

    public function renderBody() 
    {
        //using html purifier
        $dirty_html = Parsedown::instance()->parse($this->body);
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_html = $purifier->purify($dirty_html);
    }
}


