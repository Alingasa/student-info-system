<?php
  
namespace App\Http\Controllers;
  

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Auth;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        
        
        $Admin = User::simplePaginate(5);
        
        return view('admin.index',compact('Admin'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);

                    // $Admin = User::latest()->paginate(5);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' =>  ['required', 'numeric'],
            'firstname' => 'required',
            'lastname' => 'required',
            'role' => 'required',
             'email' => 'required|email|unique:users',
            'status' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        User::create($request->all());
         
        return redirect()->route('admin.index')
                        ->with('success','Users created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(User $Admin): View
    {
        
        return view('admin.show',compact('Admin'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $Admin): View
    {
        
        return view('admin.edit',compact('Admin'));
    }
  
    
    /**
 * Update the specified resource in storage.
 */
public function update(Request $request, User $Admin): RedirectResponse
{
  
    $data = $request->validate([
        'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'role' => 'required',
        'user_id' => ['required', 'numeric'],
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'status' => 'required',
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    // dd($data);

    // Update other fields


    if ($request->hasFile('avatar')) {
        // Delete the previous avatar if it exists
        if ($Admin->avatar) {
            Storage::disk('public')->delete($Admin->avatar);
        }

        $avatar = $request->file('avatar');
        // dd($avatar);
        $avatarPath = $avatar->store('avatars', 'public'); // Store the file in the 'avatars' directory within the 'public' disk
        $data['avatar'] = $avatarPath;

    } else {
        // No file provided, set avatar to null
        $data['avatar'] = null;
    }
  
    $Admin->update($data);

    
   if(auth()->user()->role == "Student" || auth()->user()->role == "Teacher"  ){
    return redirect()->to('http://localhost:8000/dashboard')->with('update_success', 'User updated successfully');
   }
    return redirect()->route('admin.index')->with('update_success', 'User updated successfully');
}

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $Admin): RedirectResponse
    {
        $Admin->delete();
        
        return redirect()->route('admin.index')
                        ->with('delete','User deleted successfully');
    }
 
}
