package pl.grudev.eventmanager.application;

import org.springframework.stereotype.Service;
import pl.grudev.eventmanager.api.EventEndpoint;
import pl.grudev.eventmanager.domain.Event;

@Service
public class EventService implements EventEndpoint {

    public Event getEvent(String id) {
        return new Event("1", "GruDev #1", "20.05.2023");
    }
}
