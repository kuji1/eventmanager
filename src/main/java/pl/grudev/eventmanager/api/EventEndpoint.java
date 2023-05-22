package pl.grudev.eventmanager.api;

import org.springframework.web.bind.annotation.*;
import pl.grudev.eventmanager.domain.Event;

import java.util.List;

@RestController
@RequestMapping("/")
public interface EventEndpoint {

    @GetMapping("/events/{id}")
    Event getEvent(@PathVariable String id);

    @GetMapping("/events")
    List<Event> getEvents();

    @PostMapping("/events")
    void addEvent(@RequestParam String name, @RequestParam String date);
}
