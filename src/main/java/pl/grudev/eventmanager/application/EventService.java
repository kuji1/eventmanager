package pl.grudev.eventmanager.application;

import org.springframework.stereotype.Service;
import pl.grudev.eventmanager.api.EventEndpoint;
import pl.grudev.eventmanager.domain.Event;

import java.util.List;

@Service
public class EventService implements EventEndpoint {

    public Event getEvent(String id) {
        return new Event("1", "GruDev #1", "20.05.2023");
    }

    public List<Event> getEvents() {
        return List.of(
                new Event("1", "GruDev #1", "20.05.2023"),
                new Event("2", "GruDev #2", "TBA"),
                new Event("3", "GruDev #3", "TBA")
        );
    }
}
