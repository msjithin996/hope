package com.codewreckor.hope;

import android.content.Context;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.View;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.firebase.ui.database.FirebaseRecyclerAdapter;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class Search extends AppCompatActivity {
    private EditText search_name;
    private ImageView search_icon;
    private RecyclerView result;
    private DatabaseReference mUserDatabase;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_search);

        mUserDatabase = FirebaseDatabase.getInstance().getReference("users");

        search_name = findViewById(R.id.search_textfield);
        search_icon = findViewById(R.id.search_icon);
        result = findViewById(R.id.recyclerView2);
        result.setHasFixedSize(true);
        result.setLayoutManager(new LinearLayoutManager(this));
        search_icon.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                firebaseUserSearch();
            }
        });
    }

    private void firebaseUserSearch() {
        FirebaseRecyclerAdapter<Users,UsersViewHolder> firebaseRecyclerAdapter = new FirebaseRecyclerAdapter<Users, UsersViewHolder>(

                Users.class,
                R.layout.list_layout,
                UsersViewHolder.class,
                mUserDatabase
        ) {
            @Override
            protected void populateViewHolder(UsersViewHolder viewHolder, Users model, int position) {

                viewHolder.setDetails(getApplicationContext(),model.getName(),model.getStatus(),model.getImage());

            }
        };
        result.setAdapter(firebaseRecyclerAdapter);
    }

    public class UsersViewHolder extends RecyclerView.ViewHolder{
        View mview;

        public UsersViewHolder(View itemView) {
            super(itemView);
            mview = itemView;
        }
        public void setDetails(Context ctx ,String userName, String userStatus, String userImage){

            TextView user_name = findViewById(R.id.Name_text);
            TextView user_status =  findViewById(R.id.status_person);
            ImageView user_image = findViewById(R.id.profile_image);
            user_name.setText(userName);
            user_status.setText(userStatus);
            Glide.with(ctx).load(userImage).into(user_image);

        }
    }
}
