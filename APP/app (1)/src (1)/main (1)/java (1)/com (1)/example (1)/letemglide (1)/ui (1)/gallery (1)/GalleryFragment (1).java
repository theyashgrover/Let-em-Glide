package com.example.letemglide.ui.gallery;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;

import com.example.letemglide.R;
import com.example.letemglide.formh;
import com.example.letemglide.ui.slideshow.SlideshowFragment;

public class GalleryFragment extends Fragment {

    Activity context;


    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {
        context = getActivity();

        View root = inflater.inflate(R.layout.fragment_gallery, container, false);

        return root;
    }

    public void onStart(){
        super.onStart();
        Button btn1 = (Button) context.findViewById(R.id.button3);
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(context, formh.class);
                startActivity(intent);
            }
        });
    }
}

