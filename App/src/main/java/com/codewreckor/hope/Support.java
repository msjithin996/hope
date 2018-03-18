package com.codewreckor.hope;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

public class Support extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_support);
        ImageView shelter = findViewById(R.id.imageView6);
        shelter.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent next_activity = new Intent(Support.this,Shelter.class);
                startActivity(next_activity);
            }
        });
        ImageView donate = findViewById(R.id.donation_support);
        donate.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent next_donate = new Intent(Support.this,Donation.class);
                startActivity(next_donate);
            }
        });
    }
}
