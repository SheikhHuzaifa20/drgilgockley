<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'image', 'status','inner_desc','link', 'sort_order'];
    protected $dates = ['deleted_at'];

    public function getInnerContent()
    {
        if ($this->link) {
            return '<a href="' . $this->link . '" target="_blank">' . $this->link . '</a>';
        }
        return $this->inner_desc;
    }

    public function hasLink()
    {
        return !is_null($this->link) && $this->link !== '';
    }

    // Helper method to check if blog has inner description
    public function hasInnerDesc()
    {
        return !is_null($this->inner_desc) && $this->inner_desc !== '';
    }

    // Get the content to display (inner_desc or description)
    public function getContent()
    {
        return $this->inner_desc ?? $this->description;
    }

    // Get the URL for this blog
    public function getUrl()
    {
        if ($this->hasLink()) {
            return $this->link;
        }
        return route('blog.detail', $this->id);
    }

    // Check if link should open in new tab
    public function shouldOpenInNewTab()
    {
        return $this->hasLink();
    }
}