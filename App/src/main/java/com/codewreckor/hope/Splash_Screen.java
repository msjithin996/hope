package com.codewreckor.hope;

import android.content.Intent;
import android.os.Handler;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;

public class Splash_Screen extends AppCompatActivity {
    //public static int splash_timeout=3000;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash_screen);
        ImageView logo = findViewById(R.id.logo);
        Animation fade_in_logo = AnimationUtils.loadAnimation(getApplicationContext(),R.anim.fade_in);
        logo.startAnimation(fade_in_logo);
        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                ImageView logo_move = findViewById(R.id.logo);
                Animation move_logo = AnimationUtils.loadAnimation(getApplicationContext(),R.anim.move_top);
                logo_move.startAnimation(move_logo);
            }
        },3200);

        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                Intent i= new Intent(Splash_Screen.this,FirstPage.class);
                startActivity(i);
                overridePendingTransition(R.anim.fade_in,R.anim.fade_out);
                finish();
            }
        },3500);
    }

}
